<?php

namespace Faker\Provider;

class File extends \Faker\Provider\Base
{

	/**
	 * @var array List of basic MIME types
	 * @link http://reference.sitepoint.com/html/mime-types
	 */
	protected static $mimeTypes = array('audio/basic','video/msvideo, video/avi, video/x-msvideo','image/bmp','application/x-bzip2','text/css','application/xml-dtd','application/msword','application/vnd.openxmlformats-officedocument.wordprocessingml.document','application/vnd.openxmlformats-officedocument.wordprocessingml.template','application/ecmascript','application/octet-stream','image/gif','application/x-gzip','application/mac-binhex40','text/html','application/java-archive','image/jpeg','application/x-javascript','audio/x-midi','audio/mpeg','video/mpeg','audio/vorbis, application/ogg','application/pdf','application/x-perl','image/png','application/vnd.openxmlformats-officedocument.presentationml.template','application/vnd.openxmlformats-officedocument.presentationml.slideshow','application/vnd.ms-powerpoint','application/vnd.openxmlformats-officedocument.presentationml.presentation','application/postscript','video/quicktime','audio/x-pn-realaudio, audio/vnd.rn-realaudio','audio/x-pn-realaudio, audio/vnd.rn-realaudio','application/rdf, application/rdf+xml','application/rtf','text/sgml','application/x-stuffit','application/vnd.openxmlformats-officedocument.presentationml.slide','image/svg+xml','application/x-shockwave-flash','application/x-tar','application/x-tar','image/tiff','text/tab-separated-values','text/plain','audio/wav, audio/x-wav','application/vnd.ms-excel.addin.macroEnabled.12','application/vnd.ms-excel','application/vnd.ms-excel.sheet.binary.macroEnabled.12','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet','application/vnd.openxmlformats-officedocument.spreadsheetml.template','application/xml','application/zip, application/x-compressed-zip');

	protected static $fileExtensions = array('bmp','bz2','css','dtd','doc','docx','dotx','es','exe','gif','gz','hqx','html','jar','jpg','js','midi','mp3','mpeg','ogg','pdf','pl','png','potx','ppsx','ppt','pptx','ps','qt','ra','ram','rdf','rtf','sgml','sit','sldx','svg','swf','targz','tgz','tiff','tsv','txt','wav','xlam','xls','xlsb','xlsx','xltx','xml','zip');

	/**
     * @example 'video/avi'
     */
    public static function mimeType()
    {
        return static::randomElement(static::$mimeTypes);
    }

	public static function fileExt(){
		return static::randomElement(static::$fileExtensions);
	}

}
