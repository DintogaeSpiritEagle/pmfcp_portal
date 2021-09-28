# PMFCParty Portal

The PMFCParty Portal is a containerized end-to-end web application that servers two purposes:
- Membership Portal:
  - User login
  - Google Maps Landing page
- Payment Gateway (API)
  - SPA Application with two (2) integrations:
    - Receive Donations via Membership Portal
    - Receive Donations via PMFCParty Website

## License & Copyright
This software application remains the sole property of the &copy;[PMFCParty PNG](https://www.pmfcparty.com/home).
Any unauthorized duplication of this application for personal, malicious or monetary intent is considered a crime, and punishaable by law.

## Installation on Local environment

```bash
$ docker-compose up -d --build // build the project containers. Note: In Dev, run once or everytime the containers need to be respawned.
$ make npm-devup
```

For more info, please email us at ict@pmfcparty.com.