#!/bin/sh

#remove old container
docker rm -f web_server
docker-compose rm

#create container
docker-compose build web_server
docker-compose up -d web_server