<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| MIME TYPES
| -------------------------------------------------------------------
| This file contains an array of mime types.  It is used by the
| Upload class to help identify allowed file types.
|
*/
return array(
	'hqx'	=>	array('app/mac-binhex40', 'app/mac-binhex', 'app/x-binhex40', 'app/x-mac-binhex40'),
	'cpt'	=>	'app/mac-compactpro',
	'csv'	=>	array('text/x-comma-separated-values', 'text/comma-separated-values', 'app/octet-stream', 'app/vnd.ms-excel', 'app/x-csv', 'text/x-csv', 'text/csv', 'app/csv', 'app/excel', 'app/vnd.msexcel', 'text/plain'),
	'bin'	=>	array('app/macbinary', 'app/mac-binary', 'app/octet-stream', 'app/x-binary', 'app/x-macbinary'),
	'dms'	=>	'app/octet-stream',
	'lha'	=>	'app/octet-stream',
	'lzh'	=>	'app/octet-stream',
	'exe'	=>	array('app/octet-stream', 'app/x-msdownload'),
	'class'	=>	'app/octet-stream',
	'psd'	=>	array('app/x-photoshop', 'image/vnd.adobe.photoshop'),
	'so'	=>	'app/octet-stream',
	'sea'	=>	'app/octet-stream',
	'dll'	=>	'app/octet-stream',
	'oda'	=>	'app/oda',
	'pdf'	=>	array('app/pdf', 'app/force-download', 'app/x-download', 'binary/octet-stream'),
	'ai'	=>	array('app/pdf', 'app/postscript'),
	'eps'	=>	'app/postscript',
	'ps'	=>	'app/postscript',
	'smi'	=>	'app/smil',
	'smil'	=>	'app/smil',
	'mif'	=>	'app/vnd.mif',
	'xls'	=>	array('app/vnd.ms-excel', 'app/msexcel', 'app/x-msexcel', 'app/x-ms-excel', 'app/x-excel', 'app/x-dos_ms_excel', 'app/xls', 'app/x-xls', 'app/excel', 'app/download', 'app/vnd.ms-office', 'app/msword'),
	'ppt'	=>	array('app/powerpoint', 'app/vnd.ms-powerpoint', 'app/vnd.ms-office', 'app/msword'),
	'pptx'	=> 	array('app/vnd.openxmlformats-officedocument.presentationml.presentation', 'app/x-zip', 'app/zip'),
	'wbxml'	=>	'app/wbxml',
	'wmlc'	=>	'app/wmlc',
	'dcr'	=>	'app/x-director',
	'dir'	=>	'app/x-director',
	'dxr'	=>	'app/x-director',
	'dvi'	=>	'app/x-dvi',
	'gtar'	=>	'app/x-gtar',
	'gz'	=>	'app/x-gzip',
	'gzip'  =>	'app/x-gzip',
	'php'	=>	array('app/x-httpd-php', 'app/php', 'app/x-php', 'text/php', 'text/x-php', 'app/x-httpd-php-source'),
	'php4'	=>	'app/x-httpd-php',
	'php3'	=>	'app/x-httpd-php',
	'phtml'	=>	'app/x-httpd-php',
	'phps'	=>	'app/x-httpd-php-source',
	'js'	=>	array('app/x-javascript', 'text/plain'),
	'swf'	=>	'app/x-shockwave-flash',
	'sit'	=>	'app/x-stuffit',
	'tar'	=>	'app/x-tar',
	'tgz'	=>	array('app/x-tar', 'app/x-gzip-compressed'),
	'z'	=>	'app/x-compress',
	'xhtml'	=>	'app/xhtml+xml',
	'xht'	=>	'app/xhtml+xml',
	'zip'	=>	array('app/x-zip', 'app/zip', 'app/x-zip-compressed', 'app/s-compressed', 'multipart/x-zip'),
	'rar'	=>	array('app/x-rar', 'app/rar', 'app/x-rar-compressed'),
	'mid'	=>	'audio/midi',
	'midi'	=>	'audio/midi',
	'mpga'	=>	'audio/mpeg',
	'mp2'	=>	'audio/mpeg',
	'mp3'	=>	array('audio/mpeg', 'audio/mpg', 'audio/mpeg3', 'audio/mp3'),
	'aif'	=>	array('audio/x-aiff', 'audio/aiff'),
	'aiff'	=>	array('audio/x-aiff', 'audio/aiff'),
	'aifc'	=>	'audio/x-aiff',
	'ram'	=>	'audio/x-pn-realaudio',
	'rm'	=>	'audio/x-pn-realaudio',
	'rpm'	=>	'audio/x-pn-realaudio-plugin',
	'ra'	=>	'audio/x-realaudio',
	'rv'	=>	'video/vnd.rn-realvideo',
	'wav'	=>	array('audio/x-wav', 'audio/wave', 'audio/wav'),
	'bmp'	=>	array('image/bmp', 'image/x-bmp', 'image/x-bitmap', 'image/x-xbitmap', 'image/x-win-bitmap', 'image/x-windows-bmp', 'image/ms-bmp', 'image/x-ms-bmp', 'app/bmp', 'app/x-bmp', 'app/x-win-bitmap'),
	'gif'	=>	'image/gif',
	'jpeg'	=>	array('image/jpeg', 'image/pjpeg'),
	'jpg'	=>	array('image/jpeg', 'image/pjpeg'),
	'jpe'	=>	array('image/jpeg', 'image/pjpeg'),
	'png'	=>	array('image/png',  'image/x-png'),
	'tiff'	=>	'image/tiff',
	'tif'	=>	'image/tiff',
	'css'	=>	array('text/css', 'text/plain'),
	'html'	=>	array('text/html', 'text/plain'),
	'htm'	=>	array('text/html', 'text/plain'),
	'shtml'	=>	array('text/html', 'text/plain'),
	'txt'	=>	'text/plain',
	'text'	=>	'text/plain',
	'log'	=>	array('text/plain', 'text/x-log'),
	'rtx'	=>	'text/richtext',
	'rtf'	=>	'text/rtf',
	'xml'	=>	array('app/xml', 'text/xml', 'text/plain'),
	'xsl'	=>	array('app/xml', 'text/xsl', 'text/xml'),
	'mpeg'	=>	'video/mpeg',
	'mpg'	=>	'video/mpeg',
	'mpe'	=>	'video/mpeg',
	'qt'	=>	'video/quicktime',
	'mov'	=>	'video/quicktime',
	'avi'	=>	array('video/x-msvideo', 'video/msvideo', 'video/avi', 'app/x-troff-msvideo'),
	'movie'	=>	'video/x-sgi-movie',
	'doc'	=>	array('app/msword', 'app/vnd.ms-office'),
	'docx'	=>	array('app/vnd.openxmlformats-officedocument.wordprocessingml.document', 'app/zip', 'app/msword', 'app/x-zip'),
	'dot'	=>	array('app/msword', 'app/vnd.ms-office'),
	'dotx'	=>	array('app/vnd.openxmlformats-officedocument.wordprocessingml.document', 'app/zip', 'app/msword'),
	'xlsx'	=>	array('app/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'app/zip', 'app/vnd.ms-excel', 'app/msword', 'app/x-zip'),
	'word'	=>	array('app/msword', 'app/octet-stream'),
	'xl'	=>	'app/excel',
	'eml'	=>	'message/rfc822',
	'json'  =>	array('app/json', 'text/json'),
	'pem'   =>	array('app/x-x509-user-cert', 'app/x-pem-file', 'app/octet-stream'),
	'p10'   =>	array('app/x-pkcs10', 'app/pkcs10'),
	'p12'   =>	'app/x-pkcs12',
	'p7a'   =>	'app/x-pkcs7-signature',
	'p7c'   =>	array('app/pkcs7-mime', 'app/x-pkcs7-mime'),
	'p7m'   =>	array('app/pkcs7-mime', 'app/x-pkcs7-mime'),
	'p7r'   =>	'app/x-pkcs7-certreqresp',
	'p7s'   =>	'app/pkcs7-signature',
	'crt'   =>	array('app/x-x509-ca-cert', 'app/x-x509-user-cert', 'app/pkix-cert'),
	'crl'   =>	array('app/pkix-crl', 'app/pkcs-crl'),
	'der'   =>	'app/x-x509-ca-cert',
	'kdb'   =>	'app/octet-stream',
	'pgp'   =>	'app/pgp',
	'gpg'   =>	'app/gpg-keys',
	'sst'   =>	'app/octet-stream',
	'csr'   =>	'app/octet-stream',
	'rsa'   =>	'app/x-pkcs7',
	'cer'   =>	array('app/pkix-cert', 'app/x-x509-ca-cert'),
	'3g2'   =>	'video/3gpp2',
	'3gp'   =>	array('video/3gp', 'video/3gpp'),
	'mp4'   =>	'video/mp4',
	'm4a'   =>	'audio/x-m4a',
	'f4v'   =>	'video/mp4',
	'webm'	=>	'video/webm',
	'aac'   =>	'audio/x-acc',
	'm4u'   =>	'app/vnd.mpegurl',
	'm3u'   =>	'text/plain',
	'xspf'  =>	'app/xspf+xml',
	'vlc'   =>	'app/videolan',
	'wmv'   =>	array('video/x-ms-wmv', 'video/x-ms-asf'),
	'au'    =>	'audio/x-au',
	'ac3'   =>	'audio/ac3',
	'flac'  =>	'audio/x-flac',
	'ogg'   =>	'audio/ogg',
	'kmz'	=>	array('app/vnd.google-earth.kmz', 'app/zip', 'app/x-zip'),
	'kml'	=>	array('app/vnd.google-earth.kml+xml', 'app/xml', 'text/xml'),
	'ics'	=>	'text/calendar',
	'ical'	=>	'text/calendar',
	'zsh'	=>	'text/x-scriptzsh',
	'7zip'	=>	array('app/x-compressed', 'app/x-zip-compressed', 'app/zip', 'multipart/x-zip'),
	'cdr'	=>	array('app/cdr', 'app/coreldraw', 'app/x-cdr', 'app/x-coreldraw', 'image/cdr', 'image/x-cdr', 'zz-app/zz-winassoc-cdr'),
	'wma'	=>	array('audio/x-ms-wma', 'video/x-ms-asf'),
	'jar'	=>	array('app/java-archive', 'app/x-java-app', 'app/x-jar', 'app/x-compressed'),
	'svg'	=>	array('image/svg+xml', 'app/xml', 'text/xml'),
	'vcf'	=>	'text/x-vcard',
	'srt'	=>	array('text/srt', 'text/plain'),
	'vtt'	=>	array('text/vtt', 'text/plain'),
	'ico'	=>	array('image/x-icon', 'image/x-ico', 'image/vnd.microsoft.icon')
);
