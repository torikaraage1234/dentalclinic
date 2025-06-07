<?php
function dental_setup() {
   add_theme_support( 'post-thumbnails' ); //アイキャッチ画像をON
}
add_action( 'after_setup_theme', 'dental_setup' ); //テーマ初期化のタイミングで関数を読み込み