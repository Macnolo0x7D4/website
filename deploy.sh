#!/bin/sh

DIR=/var/lib/hugo/macnolo.net/

hugo && rsync -avz --delete public/ ${USER}@${HOST}:${DIR}

exit 0
