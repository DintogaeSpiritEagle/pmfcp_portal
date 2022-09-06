# <img src="images/pmfcp_logo.svg" width="100px" height="100px"> PMFCParty Portal&copy;

The PMFCParty Portal is a containerized end-to-end web application that servers two purposes:
- Membership Portal:
  - User login
  - Google Maps Geolocation
- Payment Gateway (API)
  - SPA Application with two (2) integrations:
    - Receive Donations via Membership Portal
    - Receive Donations via PMFCParty Website
## Important Note
This document exists to provide technical guidance to the developers of this application.

## Licence & Copyright
This software application remains the sole property of the &copy;[Ark Cyber Security Consultants](https://www.arkcybersecurityconsultants.com).
Any unauthorized duplication of this appqlication for personal, malicious or monetary intent is considered a crime, and punishable by law.

## Installation on Local environment
### Steps
1. Update the `DB_*` environment variables in the `.env` file in your project root:
`Note:` _These environment variables will be used by docker-compose in the next step to build your database._
```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=pfmcp
DB_USERNAME=pmfcp
DB_PASSWORD=pmfcp
DB_ROOT_PASSWORD=root
``` 
2. Spin up containers
```bash
$ docker-compose up -d --build // build the project containers. Note: In Dev, run once or everytime the containers need to be respawned.
```
3. Install / Publish node modules and set `watch` to monitor code updates.
```bash
$ make npm-devup
```
4. Run the DB migrations & seed the database with test data
```bash
$ make fresh
```
5. If you experience any database related errors, then run the following db rollback command, and repeat step 4.
```bash
$ make rollback-test
```
6. Login with the test user credentials.
```bash
E: test@pmfcparty.com
P: abcd1234
````
7. Begin building!

For more info, please email _SpiritEagle_ at yamis.spiriteagle@gmail.com
