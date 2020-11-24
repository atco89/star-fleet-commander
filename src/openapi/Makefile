install:
	git clone https://github.com/openapitools/openapi-generator
	mvn -f ./openapi-generator clean package
gen:
	java -jar ./openapi-generator/modules/openapi-generator-cli/target/openapi-generator-cli.jar generate \
	   -i ./openapi.yaml \
	   -o ./packages/star-fleet-commander \
	   -g php-symfony