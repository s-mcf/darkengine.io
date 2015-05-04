# Pull base image.
FROM ubuntu

RUN apt-get update && apt-get dist-upgrade -y
RUN apt-get install software-properties-common -y

# Install Nginx.
RUN \
  add-apt-repository -y ppa:nginx/stable && \
  apt-get update && \
  apt-get install -y nginx && \
  rm -rf /var/lib/apt/lists/*

COPY config/ /etc/nginx

# Define default command.
CMD ["nginx"]

