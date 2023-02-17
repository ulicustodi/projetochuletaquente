<?php
session_name('chulettaa');
session_start();
session_destroy();
header('location:...');