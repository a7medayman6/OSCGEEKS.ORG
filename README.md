<p align="center"><a href="https://oscgeeks.org" target="_blank"><img src="osc-logo.jpeg" width="400"></a></p>


# OSCGEEKS.ORG

## [OSCGEEKS.ORG](https://oscgeeks.org) is the official website of the Open Source Community at ASU-FCIS.

## Deployment Stack 

- PHP : Laravel -> Backend 
- MySql -> Database
- Nginx -> WebServer
- Docker -> php Container
- Docker-Compose -> running the Multi-Container app 

The deployment stack is running on top of Docker multi-container web app.
check docker-compose file [here](docker-compose.yaml)

## How to Run Locally ? 
1. clone the repository 
```bash
git clone https://github.com/a7medayman6/OSCGEEKS.ORG
```
2. copy .env.example and rename it to .env and add your database credentials
```bash
cp .env.example .env
nano .env
``` 
and edit mysql block in .env
```env
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=your_db_username
DB_PASSWORD=your_db_password
```
3. Run docker-compose 
```bash
docker-compose up -d
```
4. visit http://localhost:80 


## License

The Website is using Laravel framework which is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
