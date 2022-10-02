<?php

echo "Passwords:\n";
echo "admin: " . password_hash("admin", PASSWORD_DEFAULT) . "\n";
echo "doe: " . password_hash("doe", PASSWORD_DEFAULT) . "\n";
echo "mos: " . password_hash("moped", PASSWORD_DEFAULT) . "\n";
