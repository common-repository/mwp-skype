/* ========= INFORMATION ============================
	- author:    Wow-Company
	- url:       https://wow-estore.com/item/wow-skype-buttons-pro/
==================================================== */

'use strict';

if (document.readyState === 'loading') {
	document.addEventListener('DOMContentLoaded', skypeReadyLoad); // Document still loading so DomContentLoaded can still fire :)
} else {
	skypeReadyLoad();
}

function skypeReadyLoad() {
	const $skypeBtn = Array.prototype.slice.call(document.querySelectorAll('.wow-skype-buttons-wrapper'), 0);

	if ($skypeBtn.length > 0) {
		for (let i = 0; i < $skypeBtn.length; ++i) {
			$skypeBtn[i].addEventListener('click', skypeBtnAction);
		}
	}

	function skypeBtnAction(event) {
		let btn = this.children[1];
		btn.classList.toggle('skype-hidden');
		let arrowDown = this.querySelector('.btn-down');
		let arrowUp = this.querySelector('.btn-up');
		arrowDown.classList.toggle('arrow-hidden');
		arrowUp.classList.toggle('arrow-hidden');
	}
}