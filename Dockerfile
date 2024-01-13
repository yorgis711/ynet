
FROM arm64v8/alpine:latest


RUN apk add --no-cache nginx

WORKDIR /usr/share/nginx/html


COPY . .


COPY nginx.conf /etc/nginx/nginx.conf

CMD ["nginx", "-g", "daemon off;"]
