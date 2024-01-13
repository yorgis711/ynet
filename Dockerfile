
FROM arm64v8/alpine:latest AS builder


RUN apk --no-cache add qemu-user-static


COPY /usr/bin/qemu-aarch64-static /usr/bin


FROM arm64v8/nginx:1.13.11-alpine

WORKDIR /usr/share/nginx/html


COPY . .



CMD ["nginx", "-g", "daemon off;"]
