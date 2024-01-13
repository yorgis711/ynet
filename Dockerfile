
FROM nginx:1.13.11-alpine

WORKDIR /usr/share/nginx/html

COPY . .


CMD ["nginx", "-g", "daemon off;"]
