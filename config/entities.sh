#!/bin/bash

# Create entities with properties
vendor/bin/doctrine orm:convert-mapping --namespace="Supermarket\\entities\\" --force  --from-database annotation src


vendor/bin/doctrine orm:generate-entities --generate-annotations='true' src/