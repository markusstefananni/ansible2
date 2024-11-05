hosts: webservers
tasks:
-
name: installeerime php7.0
apt: name=php7.0 update_cache=yes state-latest
