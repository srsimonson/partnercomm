# Partnercomm WordPress REST API / Vue.js

## REQUIREMENTS:
### A WordPress REST API endpoint 
[x] a small plugin that serves poll content. a poll title and a few answers.

### Vue.js frontend 
[x] displays the poll and allows users to select their answer
[x] shows a count of votes for each answer.

### Etc.
[x] feel free to expand upon it if you would like. 
[x] don't feel the need to hook up users or anything overly complex.
[] push the code up to GitHub (or somewhere similar) ahead of time and share a link

## GETTING STARTED

### WordPress REST API
Project contains default WordPress 6.4.3 download, no changes except for the addition of required plugin located at:
- /partnercomm-code-challenge/wordpress/wp-content/plugins/partnercomm-rest-api/partnercomm-rest-api.php
- `cd /partnercomm-code-challenge/wordpress`
- `php -S localhost:8000`

### Vue3 frontend
Project contains default Vue.JS install of vue@3.4.21.
`cd /partnercomm-code-challenge/partnercomm-poll`
`npm install`
`npm run serve`