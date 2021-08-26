on: push
name: Deploy website on push
jobs:
web-deploy:
name: Deploy
runs-on: ubuntu-latest
steps:
- name: Get latest code
uses: actions/checkout@v2

- name: Sync files
uses: SamKirkland/FTP-Deploy-Action@4.0.0
with:
server: fabrik.top
server-dir: /digital-event
port: 21
protocol: ftp
username: miro
password: Vbhjck5
exclude: .git*
-.github*