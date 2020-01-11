# Hands on Docker - Creating your own LAMP or LEMP stack

```docker stack deploy -c docker-compose.yml workshop```

#### Docker App -- How To 
https://docs.docker.com/app/working-with-app/

## Experimental Features - Docker App
```
docker app init --single-file workshop
```
```
docker app inspect workshop.dockerapp
```
```
docker app validate workshop.dockerapp
```
```
docker app install workshop.dockerapp --name workshop
```
```
docker app status workshop
```
```
docker app push workshop --tag <docker_hub_id>/workshop:stage1 
```

```
docker app uninstall workshop
```

```
docker app install dhluther/workshop:stage1
```