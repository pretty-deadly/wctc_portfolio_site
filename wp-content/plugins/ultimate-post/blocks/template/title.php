<?php
defined( 'ABSPATH' ) || exit;

$post_loop .= '<'.$attr['titleTag'].' class="ultp-block-title '.($attr['titleStyle']=='none' ? '' : ' ultp-title-'.$attr['titleStyle']).'"><a href="'.$titlelink.'" '.($attr['openInTab'] ? 'target="_blank"' : '').'>'.$title.'</a></'.$attr['titleTag'].'>';