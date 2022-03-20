up:
	docker run --rm -v $PWD:/app composer:2 composer --ignore-platform-reqs install
	[ -f sail ] && bash sail || bash vendor/bin/sail up -d
	[ -f sail ] && bash sail || bash vendor/bin/sail migrate
	[ -f sail ] && bash sail || bash vendor/bin/sail db:seed

down:
	[ -f sail ] && bash sail || bash vendor/bin/sail down