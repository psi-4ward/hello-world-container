# Hello World Container

[![Image Size](https://images.microbadger.com/badges/image/psitrax/hello-world.svg)](https://microbadger.com/images/psitrax/hello-world)
[![Docker Automated buil](https://img.shields.io/docker/automated/psitrax/hello-world.svg)](https://hub.docker.com/r/psitrax/hello-world/)

Simple Hello World Container

* Outputs Headers, `$_SERVER`, `$_GET`, `$_POST` for every request
* Based on php:7-alpine

![Screen](https://raw.githubusercontent.com/psi-4ward/hello-world-container/master/hello-world.png)

### Usage
```
docker run -p 0.0.0.0:9000:9000 psitrax/hello-world
```
