<?php
# TODO handle REMOTE_ADDR vs HTTP_X_FORWARDED_FOR
echo explode( ':' , $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
