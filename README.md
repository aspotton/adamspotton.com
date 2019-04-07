# ![](https://avatars1.githubusercontent.com/u/8237355?v=2&s=50) adamspotton.com

This is the repository which holds all of the files that run my personal website. `Grav` is the flat-file framework that powers it and `Saturn` is the primary theme.

## Building

```
docker build -t adamspotton:latest .
```

## Running Locally / Development

Add this entry to your `/etc/hosts` file:
```
127.0.0.1   adamspotton.test
```

Run the latest Docker image using the code in the `grav` directory:
```
docker run -it -e VIRTUAL_HOST=adamspotton.test -v $(pwd)/grav:/usr/html -p8001:80 adamspotton:latest
```

Open http://adamspotton.test:8001 in the browser.