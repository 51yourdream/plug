/* 
* @Author: lipeng
* @Date:   2015-12-09 17:24:57
* @Last Modified by:   lipeng
* @Last Modified time: 2015-12-09 17:25:43
*/

 jQuery.validator.addMethod("userName", function(value, element) {

    return this.optional(element) || /^[\u0391-\uFFE5\w]+$/.test(value);

}, "用户名必须在5-10个字符之间");   

jQuery.validator.addMethod("isZipCode", function(value, element) {   

    var tel = /^[0-9]{6}$/;

    return this.optional(element) || (tel.test(value));

}, "请正确填写您的邮政编码");
