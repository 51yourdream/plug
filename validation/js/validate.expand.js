/* 
* @Author: lipeng
* @Date:   2015-12-09 17:24:57
* @Last Modified by:   lipeng
* @Last Modified time: 2015-12-09 20:59:58
*/

// 自定义验证方法 

jQuery.validator.addMethod("isZipCode", function(value, element) {   //验证邮编

    var tel = /^[0-9]{6}$/;

    return this.optional(element) || (tel.test(value));

}, "请正确填写您的邮政编码");
