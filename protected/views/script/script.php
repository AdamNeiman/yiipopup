<?php
?>
const aws_CSS = 
`
<style>
.aws_popup__bg {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    background: rgba(0,0,0,0.5);
    opacity: 0;
    pointer-events: none;
    transition: 0.5s all;
	z-index: 10000;
}

.aws_popup__bg.aws_active {
    opacity: 1;
    pointer-events: all;
    transition: 0.5s all;
}

.aws_popup {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0);
    background: #fff;
    width: 400px;
    padding: 25px;
    transition: 0.5s all;
}

.aws_popup.aws_active {
    transform: translate(-50%, -50%) scale(1);
    transition: 0.5s all;
}

svg.aws_close-popup {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
}

.aws_popup label {
    width: 100%;
    margin-bottom: 25px;
    display: flex;
    flex-direction: column-reverse;
}

.aws_popup .aws_label__text {
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 500;
    color: #cfd0d3;
    margin-bottom: 5px;
}

.aws_popup input {
    height: 45px;
    font-size: 18px;
    border: none;
    outline: none;
    border-bottom: 1px solid #cfd0d3;
}

.aws_popup input:focus {
    border-bottom: 1px solid #2982ff;
}

.aws_popup input:focus + .label__text {
    color: #2982ff;
}

.aws_popup textarea {
    resize: none;
    width: 100%;
    height: 150px;
    border: none;
    outline: none;
    border-bottom: 1px solid #cfd0d3;
    font-size: 18px;
    padding-top: 5px;
}

.aws_popup textarea:focus {
    border-bottom: 1px solid #2982ff;
}

.aws_popup textarea:focus + .label__text {
    color: #2982ff;
}

.aws_popup button {
    width: 100%;
    height: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 18px;
    border: 2px solid #2982ff;
    background: #2982ff;
    cursor: pointer;
    text-transform: uppercase;
    transition: 0.5s all;
}

.aws_popup button:hover {
    background: #fff;
    color:#2982ff;
    transition: 0.5s all;
}
.aws_popup_content {
	min-height: 5em;
}
</style>

`;

const aws_HTML = 
`
<div class="aws_popup__bg">
    <div class="aws_popup">
        <svg class="aws_close-popup" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#2982ff" d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"/></svg>
        <div class="aws_popup_content">
		<?= $content ?>
        </div>
        <button class="aws_close-popup">Закрыть</button>
    </div>
</div>  

`;


function aws_showPopup() {
	
		
	let popupBg = document.querySelector('.aws_popup__bg');
	let popup = document.querySelector('.aws_popup');
	let closePopupButton = document.querySelectorAll('.aws_close-popup');

	if (closePopupButton) {
		closePopupButton.forEach((button) => {
		
			button.addEventListener('click',() => {
				popupBg.classList.remove('aws_active');
				popup.classList.remove('aws_active');
			});
			
		})
	}
	
	document.addEventListener('click', (e) => {
		if(e.target === popupBg) {
			popupBg.classList.remove('aws_active');
			popup.classList.remove('aws_active');
		}
	});	
	
	if (popupBg) popupBg.classList.add('aws_active');
	if (popup) popup.classList.add('aws_active');
	

}

document.addEventListener('DOMContentLoaded', function() {
  	
	let aws_container = document.createElement('div');
	aws_container.innerHTML  = aws_CSS + aws_HTML;
	document.body.append(aws_container);

}, false);

setTimeout(aws_showPopup, <?= $interval ?>);


