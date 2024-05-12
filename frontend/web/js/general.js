const authenticationStatus = {
	'CLEAR': 'CLEAR',
	'SIGN_UP': 'SIGN_UP',
	'SIGN_IN': 'SIGN_IN'
};

let lastScrollPosition = 0;
function updateScroll() {
    let header = document.getElementById('header');
    let scrollDistance = window.pageYOffset;
    if (scrollDistance > lastScrollPosition) {
        header.classList.add('scroll');
        document.body.classList.add('body-scroll');
    } else {
        header.classList.remove('scroll');
        document.body.classList.remove('body-scroll');
    }
    lastScrollPosition = scrollDistance;
}
window.addEventListener('scroll', updateScroll);

document.querySelectorAll(".js_catalogToggle").forEach(button => {
    button.addEventListener("click", event => {
        event.preventDefault();
        catalogToggle();
    });
});

function checkCatalogActive() {
    return document.getElementById('header-catalog').classList.contains("active");
}
function catalogToggle(){
    let header = document.getElementById("header");
    let headerCatalog = document.getElementById("header-catalog");
    let headerCatalogLining = document.getElementById("header-catalog__lining");
    let catalogButtonPC = document.getElementById("header-bottom__catalog");
    let catalogButtonMob = document.getElementById("header-bottom__dropdown");
    let scrollBarWidth = window.innerWidth - document.documentElement.clientWidth;

    if (checkCatalogActive()) {
        headerCatalog.classList.remove('active');
        catalogButtonPC.classList.remove('active');
        catalogButtonMob.classList.remove('active');
        headerCatalogLining.classList.remove('active');
        document.body.style.overflow = "auto";
        header.style.paddingRight = '';
    } else {
        headerCatalogTop();
        headerCatalog.classList.add('active');
        catalogButtonPC.classList.add('active');
        catalogButtonMob.classList.add('active');
        headerCatalogLining.classList.add('active');
        document.body.style.overflow = "hidden";
        header.style.paddingRight = scrollBarWidth + 'px';
    }
    headerCatalogMargin();
}

function headerCatalogTop() {
    let headerHeight = document.getElementById("header").offsetHeight;
    let headerCatalog = document.getElementById("header-catalog");
    headerCatalog.style.top = headerHeight + 'px';
    headerCatalog.style.maxHeight = window.innerHeight - headerHeight + "px";
}
function headerCatalogMargin() {
    let headerCatalog = document.getElementById("header-catalog");
    if (checkCatalogActive()) {
        headerCatalog.style.marginTop = '0px';
    } else {
        headerCatalog.style.marginTop = '';
    }
}

function updateResize() {
    headerCatalogMargin();
    headerCatalogTop();

}
window.addEventListener('resize', updateResize);

let btnSubMenu = document.getElementById('page1_title');
btnSubMenu.addEventListener('click', function (event) {
    event.preventDefault();
    btnSubMenuClick();
});

function btnSubMenuClick() {
    let catalogPage1 = document.getElementById("header-catalog__page1");
    let catalogPage2 = document.getElementById("header-catalog__page2");

    if (catalogPage2.classList.contains("active")){
        catalogPage1.classList.remove("deactive");
        catalogPage2.classList.remove("active");
        btnSubMenu.classList.remove("page2");
        handleCatalogTitleClick();
    } else {
        catalogPage1.classList.add("deactive");
        catalogPage2.classList.add("active");
        btnSubMenu.classList.add("page2");
    }
}

function handleCatalogTitleClick(title = false) {
    let catalogPage2 = document.getElementById("header-catalog__page2");
    if (title === false) {
        let catalogList = catalogPage2.querySelector('.header-catalog__list.active');
        if(catalogList){
            catalogPage2.querySelector('.header-catalog__list.active').classList.remove('active');
        }
        catalogPage2.classList.remove('clear');
        return;
    }
    let catalogList = title.closest('.header-catalog__list');

    if (catalogList.classList.contains("active")) {
        catalogList.classList.remove('active');
        catalogPage2.classList.remove('clear');
    } else {   
        catalogList.classList.add('active');
        catalogPage2.classList.add('clear');
    }
}

let catalogTitles = document.querySelectorAll('.header-catalog__title');
catalogTitles.forEach(function(title) {
    title.addEventListener('click', function(event) {
        event.preventDefault();

        handleCatalogTitleClick(title);

    });
});

/* FAQ */
const faqContainers = document.querySelectorAll('.faq');
faqContainers.forEach(faqContainer => {
    const faqBlocks = faqContainer.querySelectorAll('.faq__block');
    faqBlocks.forEach(faqBlock => {
        const title = faqBlock.querySelector('.faq__title');
        title.addEventListener('click', () => {
            faq(faqBlock);
        });
    });
});

function faq(faqBlock) {
    if (faqBlock.classList.contains('active')) {
        faqBlock.classList.remove('active');
    } else {
        const activeBlocks = faqBlock.closest('.faq').querySelectorAll('.faq__block.active');
        if (activeBlocks.length > 0) {
            activeBlocks.forEach(activeBlock => {
                if (activeBlock !== faqBlock) {
                    activeBlock.classList.remove('active');
                }
            });
        }
        faqBlock.classList.add('active');
        faqHeight(faqBlock);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    setAllFaqBlockHeights();
});

window.addEventListener('resize', () => {
    setAllFaqBlockHeights();
});

function setAllFaqBlockHeights() {
    const faqBlocks = document.querySelectorAll('.faq__block');
    faqBlocks.forEach(faqBlock => {
        faqHeight(faqBlock);
    });
}

function faqHeight(faqBlock) {
    const textWrap = faqBlock.querySelector('.faq__text-wrap');
    const text = faqBlock.querySelector('.faq__text');
    textWrap.style.height = text.clientHeight + 'px';
}

/* FAQ --- end */

/*  js-more  */
let jsMoreWrap = document.querySelectorAll('.js-more__wrap');

jsMoreWrap.forEach(function (jsMoreWrapItem) {
    let dataHeight = jsMoreWrapItem.hasAttribute('data-max-height') ? jsMoreWrapItem.getAttribute('data-max-height') : 85;
    let jsMore = jsMoreWrapItem.querySelector('.js-more__block');
    let datastatus = jsMoreWrapItem.getAttribute('data-status');
    let jsMoreHeight = jsMore.clientHeight;

    if (jsMoreHeight > dataHeight || datastatus) {
        let dataInactive = jsMoreWrapItem.getAttribute('data-more-text-inactive');
        let dataActive = jsMoreWrapItem.getAttribute('data-more-text-active');
        jsMoreWrapItem.style.height = dataHeight + 'px';

        if (dataInactive && dataActive) {
            const createLink = (className, textContent) => {
                const link = document.createElement('a');
                link.href = '#';
                link.className = className;
                link.textContent = textContent;
                return link;
            };

            const jsMoreUrl = document.createElement('div');
            jsMoreUrl.className = 'js-more__url';

            const openLink = createLink('open', dataInactive);
            const closeLink = createLink('close', dataActive);
            jsMoreUrl.append(openLink, closeLink);
            jsMoreWrapItem.insertAdjacentElement('afterend', jsMoreUrl);

            function updateJsMoreHeight() {
                jsMoreHeight = jsMore.clientHeight;
            }

            jsMoreUrl.addEventListener('click', function (event) {
                event.preventDefault();
                updateJsMoreHeight();

                if (jsMoreUrl.classList.contains('active')) {
                    jsMoreUrl.classList.remove('active');
                    jsMoreWrapItem.style.height = dataHeight + 'px';
                } else {
                    jsMoreUrl.classList.add('active');
                    jsMoreWrapItem.style.height = jsMoreHeight + 'px';
                }
            });
        } else {
            let jsMoreUrl = jsMoreWrapItem.parentNode.querySelector('.js-more__url');

            jsMoreUrl.addEventListener('click', function (event) {
                event.preventDefault();
                jsMoreHeight = jsMore.clientHeight;

                if (jsMoreUrl.classList.contains('active')) {
                    jsMoreUrl.classList.remove('active');
                    jsMoreWrapItem.style.height = dataHeight + 'px';
                } else {
                    jsMoreUrl.classList.add('active');
                    jsMoreWrapItem.style.height = jsMoreHeight + 'px';
                }
            });
        }
    }
});

/*  js-more --- end */

/*  filterBtnMob  */
const filterBtnMob = document.getElementById('filter-btn-mob');
if (filterBtnMob) {
    filterBtnMob.addEventListener("click", function (event) {
        event.preventDefault();
        filterToggle();
    });
}

function filterToggle() {
    const categoryFilter = document.getElementById('category-filter');
    categoryFilter.classList.toggle('active');
}

/*  filterBtnMob --- end */

/*  js-count  */
document.querySelectorAll('.js-count').forEach(function (block) {
    let countInput = block.querySelector('.js-count__input');
    block.querySelector('.js-count__minus').addEventListener('click', function (event) {
        event.preventDefault();
        updateCount(countInput, -1);
    });
    block.querySelector('.js-count__plus').addEventListener('click', function (event) {
        event.preventDefault();
        updateCount(countInput, 1);
    });
});

function updateCount(input, change) {
    let currentValue = parseInt(input.value);
    if (!isNaN(currentValue)) {
        input.value = Math.max(0, currentValue + change);
    }
}

/*  js-count --- end */

document.addEventListener('DOMContentLoaded', function () {
    const tabButtons = document.querySelectorAll('.tab-item__title-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    const urlHash = window.location.hash.substring(1);
    const defaultTab = document.querySelector(`.tab-item__title-btn[data-to="${urlHash}"]`);
    tabButtons.forEach(button => {
        button.addEventListener('click', function () {
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));
            const targetContent = document.querySelector(`.tab-content[data-content="${button.dataset.to}"]`);
            button.classList.add('active');
            targetContent.classList.add('active');
        });
    });
    if (defaultTab) {
        defaultTab.click();
    }
});

const thumbnailImages = document.querySelectorAll('.tovar-thumbnailimg');
const mainImages = document.querySelectorAll('.tovar-generalimg');
thumbnailImages.forEach(function (thumbnail) {
    thumbnail.addEventListener('click', function (event) {
        event.preventDefault();
        thumbnailImages.forEach(function (thumb) {
            thumb.classList.remove('active');
        });
        thumbnail.classList.add('active');
        const toNumber = thumbnail.getAttribute('data-to-number');
        mainImages.forEach(function (mainImage) {
            mainImage.classList.remove('active');
        });
        const activeMainImage = document.querySelector(`.tovar-generalimg[data-number="${toNumber}"]`);
        activeMainImage.classList.add('active');
    });
});

let openCabinetOffcanvas = document.querySelectorAll(".cabinet-offcanvas__open");
let closeCabinetOffcanvas = document.getElementById("cabinet-offcanvas__close");
let cabinetOffcanvas = document.querySelector(".cabinet-offcanvas");
openCabinetOffcanvas.forEach(function (button) {
    button.addEventListener("click", function () {
        event.preventDefault();
        cabinetOffcanvas.classList.add("active");
    });
});
if (closeCabinetOffcanvas) {
    closeCabinetOffcanvas.addEventListener("click", function () {
        cabinetOffcanvas.classList.remove("active");
    });
}

let modalTriggers = document.querySelectorAll('[data-modal]');
modalTriggers.forEach(function(trigger) {
    trigger.addEventListener('click', function(event) {
        event.preventDefault();
        let modalId = this.getAttribute('data-modal');
        openModal(modalId);
    });
});

function openModal(modalId) {
    let modal = document.getElementById(modalId);
    let modalBg = document.querySelector('.modal-lining[data-close=' + modalId + ']');
    let header = document.getElementById("header");
    let scrollBarWidth = window.innerWidth - document.documentElement.clientWidth;
    header.style.paddingRight = scrollBarWidth + 'px';

    modal.classList.add("active");
    document.body.style.overflow = "hidden";
}

let closeTriggers = document.querySelectorAll('[data-close]');
closeTriggers.forEach(function(trigger) {
    trigger.addEventListener('click', function(event) {

        if (!event.target.closest('.modal-block') || event.target.closest('.modal-content__close')) {
            event.preventDefault();
            let modalId = this.getAttribute('data-close');
            closeModal(modalId);
        }
    });
});
function closeModal(modalId) {
		clearAauthenticationStatus();
	
    let modal = document.getElementById(modalId);
    let modalBg = document.querySelector('.modal-lining[data-close=' + modalId + ']');
    let header = document.getElementById("header");
    header.style.paddingRight = '';

    modal.classList.remove("active");
    document.body.style.overflow = "auto";
}

let newDivCreated = false;

function checkBodyHeight() {
    const body = document.body;
    const footer = document.querySelector('.footer');
    const newDivHeight = footer.offsetHeight;

    if (body.offsetHeight < window.innerHeight) {
        footer.classList.add('footer__bottom');

        if (!newDivCreated) {
            const newDiv = document.createElement('div');
            newDiv.style.height = newDivHeight + 'px';
            newDiv.classList.add('after-footer');
            document.body.appendChild(newDiv);
            newDivCreated = true;
        }
    } else {
        footer.classList.remove('footer__bottom');

        const newDiv = document.querySelector('.after-footer');
        if (newDiv) {
            newDiv.remove();
            newDivCreated = false;
        }
    }
}

checkBodyHeight();

window.addEventListener('resize', checkBodyHeight);


/* 
* AuthenticationStatus
*/

// Check if authentication modal should be shown
const authenticationCookieValue = getCookieValue('authenticationStatus');
switch (authenticationCookieValue) {
	case authenticationStatus.SIGN_UP:
		document.querySelector('#modal-login2').classList.add('active');
		document.body.style.overflow = "hidden";
		break;		
	case authenticationStatus.SIGN_IN:
		document.querySelector('#modal-signin').classList.add('active');
		document.body.style.overflow = "hidden";
		break;
}

// Clear
function clearAauthenticationStatus() {
	document.cookie = "authenticationStatus=" + authenticationStatus.CLEAR + "; expires=Thu, 101 Jan 1970 00:00:00 UTC";
}

/* 
* Authenticated user name correction
*/

const cookieUserName = getCookieValue('userName');
const tagUserName = document.querySelector('.header__user-name').innerHTML;

if (!tagUserName) {
	if (cookieUserName) {
		document.querySelector('.header__sign-up').remove();
		document.querySelector('.header__sign-up_hide').style.display = 'block';
		document.querySelector('.header__user-name').innerHTML = cookieUserName;
	}
}

/* 
* Get cookie
*/

function getCookieValue(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}