@extends('layouts.app')
@section('content')
<style type="text/css">
	h2 {
		font-weight: bold;
		color: #424242;
		line-height: 150%;
	}
	h4 {
		font-weight: bold;
		color: #757575;
		line-height: 200%;
	}
	.terms-cont {
		margin-bottom: 100px;
	}
	.terms-cont p, ol li{
		line-height: 200%;
		color: #757575;
		font-size: 13pt;
	}
</style>
<div style="width: 100%; height: 300px; background: #424242;">
	<div class="fixed-width" style="height: 100%;">
	<h1 style="margin-top: 225px; position: absolute; color: #E0E0E0; font-weight: bold;">Terms and Conditions</h1>
	<img style="width: 325px; margin: 0 auto; display: block; padding-top: 90px;" src="{{asset('images/logorock.png')}}">
	</div>
</div>
<div class="fixed-width terms-cont">
<h2>Introduction</h2>
<h4>Welcome to WhatRock.org!</h4>
<p>These Terms of Service (“Terms”), which include and hereby incorporate the Privacy Policy at discordapp.com/privacy (“Privacy Policy”), are a legal agreement between WhatRock.org and you ("you"). By using or accessing the WhatRock website located at https://www.whatrock.org (the "Site"), you agree (i) that you are 13 years of age or older, (ii) if you are the age of majority in your jurisdiction or over, that you have read, understood, and accept to be bound by the Terms, and (iii) if you are between 13 and the age of majority in your jurisdiction, that your legal guardian has reviewed and agrees to these Terms. WhatRock.org reserves the right, in its sole discretion, to modify or revise these Terms at any time, and you agree to be bound by such modifications or revisions. Any such change or modification will be effective seven (7) days following posting on the Site, and your continued use of the Service after the effective date will constitute your acceptance of, and agreement to, such changes or modifications. If you object to any change or modification, your sole recourse shall be to cease using the Service.</p>
<h2>Cookies</h2>
	<p>We employ the use of cookies. By using WhatRock's website you consent to the use of cookies 
	in accordance with WhatRock’s privacy policy.</p><p>Most of the modern day interactive web sites
	use cookies to enable us to retrieve user details for each visit. Cookies are used in some areas of our site
	to enable the functionality of this area and ease of use for those people visiting. Some of our 
	affiliate / advertising partners may also use cookies.</p><h2>License</h2>
	<p>Unless otherwise stated, WhatRock and/or it’s licensors own the intellectual property rights for
	all material on WhatRock. All intellectual property rights are reserved. You may view and/or print
	pages from https://www.whatrock.org for your own personal use subject to restrictions set in these terms and conditions.</p>
	<p>You must not:</p>
	<ol>
		<li>Republish material from https://www.whatrock.org</li>
		<li>Sell, rent or sub-license material from https://www.whatrock.org</li>
		<li>Reproduce, duplicate or copy material from https://www.whatrock.org</li>
	</ol>
	<p>Redistribute content from WhatRock (unless content is specifically made for redistribution).</p>
<h2>Reservation of Rights</h2>
	<p>We reserve the right at any time and in its sole discretion to request that you remove all links or any particular
	link to our Web site. You agree to immediately remove all links to our Web site upon such request. We also
	reserve the right to amend these terms and conditions and its linking policy at any time. By continuing
	to link to our Web site, you agree to be bound to and abide by these linking terms and conditions.</p>
<h2>Disclaimer</h2>
	<p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website (including, without limitation, any warranties implied by law in respect of satisfactory quality, fitness for purpose and/or the use of reasonable care and skill). Nothing in this disclaimer will:</p>
	<ol>
	<li>limit or exclude our or your liability for death or personal injury resulting from negligence;</li>
	<li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>
	<li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>
	<li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>
	</ol>
	<p>The limitations and exclusions of liability set out in this Section and elsewhere in this disclaimer: (a)
	are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer or
	in relation to the subject matter of this disclaimer, including liabilities arising in contract, in tort
	(including negligence) and for breach of statutory duty.</p>
	<p>To the extent that the website and the information and services on the website are provided free of charge,
	we will not be liable for any loss or damage of any nature.</p>
</div>
@include('partials.footer')
@endsection