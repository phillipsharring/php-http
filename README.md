# HTTP in PHP Basics

## HTTP

HTTP is a protocol for transferring Hypertext Media over the internet. Clients and servers set Requests and Responses back and forth.

Requests and Responses consist of Headers and Body content.

When requesting,

- Headers are the main source of the request.
- Many types of request methods omit the body.
- The body is used in requests to send form data or other data to the server.

When responding.

- Headers can only be sent _before_ the body.
- Headers cannot be sent _after_ or _in between_ body content.
- Once headers are sent, everything after that is considered body content by the browser.
- Body content consists of any data that the client should receive. This can be an `HTML` page's contents, the data in an image file, bytes from a binary file, etc.

Note:  Headers are not the same as an HTML `<head>` tag, although by using a `<meta>` tag with an `http-equiv` attribute inside of a `<head>` tag you can send the equivalent of a similarly-named HTTP header.

### _"How will I know?"_
- HTTP considers anything after 2 carriage returns to be content.


### Requests:

> "Here's what we want."

The browser ===> Sends a request ===> To the server

#### Example Request
```http
GET /hello.htm HTTP/1.1
User-Agent: Mozilla/4.0 (compatible; MSIE5.01; Windows NT)
Host: www.exmaple.com
Accept-Language: en-us
```
- `GET` is the request method.
- `/hello.htm` is the requested URI.
- `HTTP/1.1` is the version of `HTTP` this request is using
- `User-Agent` is the type of browser being used.
- `Host` is the webserver host name.
- `Accept-Language` tells the server which language the server should respond in, if it can.

### Responses:
> _"Here's what we've got."_

The server ===> Sends a response ===> To the browser

#### Example Response
```http
HTTP/1.1 200 OK
Content-Type: text/html
Set-Cookie: yummy_treats=brownie

<html>
<body>
<h1>Hello, World!</h1>
</body>
</html>
```
- `HTTP/1.1` again is the verion of `HTTP` this response is using.
- `Content-Type` tells the browser what kind of document is being sent.
- `Set-Cookie` is setting a cookie named `yummy_treats` with a value of `brownie`

#### Here's the problem
```http
HTTP/2.0 200 OK
Content-Type: text/html
Set-Cookie: yummy_treats=cookie 👈🏼1️⃣ These 2 new lines end headers.
                                  2️⃣
<html>                          👈🏼 This is where the content starts.
<body>
<h1>Hello, World!</h1>
</body>
</html>
```

## PHP
- Any content PHP encounters will tell it we are done sending headers.
- PHP considers any HTML outside of PHP tags or any print/echo statements to be content.
- 2 new lines will be sent into the stream to indicate headers are done.
- Any attempt to set headers after that will result in a warning from PHP.
