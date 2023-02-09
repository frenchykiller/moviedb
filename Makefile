.PHONY: help

help:
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

setup: composer start node ## Perform initial project setup
	@docker exec moviedb-web-1 npm run build
	@docker exec moviedb-web-1 npx tailwindcss -i ./resources/css/app.css -o ./public/build/assets/app.css

start: ## Start docker containers
	./vendor/bin/sail up -d

stop: ## Stop docker containers
	./vendor/bin/sail down

restart: stop start ## Restart docker containers

composer: ## Install composer packages
	@composer install

node: ## Install node packages
	@docker exec moviedb-web-1 npm ci
