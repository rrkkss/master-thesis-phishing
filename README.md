# master-thesis-phishing

# how to run
1) install docker (alongside WSL if on windows)
2) cd /phishing-app
3) copy .env.example and rename the copy to .env
4) docker compose up <br />
4.1) ports 80 or 443 might be already used, you can change those for the nginx container eg <br />
    `ports:` <br />
      ` - 8000:80` <br />
4.2) since certbot is commented out to not run locally, you should also change nginx configuration
4.3) in nginx/default.conf comment out the whole listen 80 section, then change `listen 443 ssl;` into `listen 80;`
5) log into the docker laravel container with `docker exec -it -u root app /bin/bash` and run `php artisan migrate`
6) app is running at http://localhost:8000 or whatever port you specified for nginx
7) DB connection info is in the .env file and the standard mysql 3306 port
