init:
	docker-compose up -d
down:
	@docker-compose down -v
.PHONY: clean test code-sniff init
