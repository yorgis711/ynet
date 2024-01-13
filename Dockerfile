
FROM arm64v8/nginx:latest

WORKDIR /usr/share/nginx/html


COPY . .



CMD ["nginx", "-g", "daemon off;"]
