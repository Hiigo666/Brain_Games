install:
	composer install
brain-games:
	./bin/brain-games
validate:
	composer validate
lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
brain-even:
	./bin/brain-even
test:
	./src/test
brain-calc:
	./bin/brain-calc
brain-nod:
	./bin/brain-nod
brain-progression:
	./bin/brain-progression