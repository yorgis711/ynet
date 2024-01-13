
FROM arm64v8/alpine:latest


RUN apk add --no-cache nginx

WORKDIR /usr/share/nginx/html


COPY . .




CMD ["nginx", "-g", "daemon off;"]
