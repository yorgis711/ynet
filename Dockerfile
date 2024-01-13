
FROM arm64v8/alpine:latest


RUN apk --no-cache add nginx

WORKDIR /usr/share/nginx/html


COPY . .


CMD ["nginx", "-g", "daemon off;"]
