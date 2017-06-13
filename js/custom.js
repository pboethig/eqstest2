/**
 * Validate the contactform.
 *
 * @param event
 * @returns {boolean}
 */
function validateContactForm(event)
{
    var fields = ['firstname', 'lastname' , 'email', 'message'];

    var error = false;

    $.each(fields, function (index, item) {

        if($("#" + item).val().trim()=="")
        {
            alert("Please type in your " + item);

            $("#" + item).focus();

            error = true;

            return false;
        }

        if(item=="email")
        {
            if(!checkEmail($("#" + item).val()))
            {
                alert("Your email seems to be incorrect.");

                $("#" + item).focus();

                error = true;

                return false;
            }
        }

    });

    if(error) return false;
}

/**
 * Simple way to check emailaddress
 *
 * @param emailAddress
 * @returns {boolean}
 */
function checkEmail(emailAddress) {
    var sQtext = '[^\\x0d\\x22\\x5c\\x80-\\xff]';
    var sDtext = '[^\\x0d\\x5b-\\x5d\\x80-\\xff]';
    var sAtom = '[^\\x00-\\x20\\x22\\x28\\x29\\x2c\\x2e\\x3a-\\x3c\\x3e\\x40\\x5b-\\x5d\\x7f-\\xff]+';
    var sQuotedPair = '\\x5c[\\x00-\\x7f]';
    var sDomainLiteral = '\\x5b(' + sDtext + '|' + sQuotedPair + ')*\\x5d';
    var sQuotedString = '\\x22(' + sQtext + '|' + sQuotedPair + ')*\\x22';
    var sDomain_ref = sAtom;
    var sSubDomain = '(' + sDomain_ref + '|' + sDomainLiteral + ')';
    var sWord = '(' + sAtom + '|' + sQuotedString + ')';
    var sDomain = sSubDomain + '(\\x2e' + sSubDomain + ')*';
    var sLocalPart = sWord + '(\\x2e' + sWord + ')*';
    var sAddrSpec = sLocalPart + '\\x40' + sDomain; // complete RFC822 email address spec
    var sValidEmail = '^' + sAddrSpec + '$'; // as whole string

    var reValidEmail = new RegExp(sValidEmail);

    return reValidEmail.test(emailAddress);
}

$(document).ready(function() {


});
