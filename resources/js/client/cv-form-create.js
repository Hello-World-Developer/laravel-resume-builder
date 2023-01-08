window.removeSkillField = function (target) {
    $el(target).remove();
    const hasSkillField = $el('#skill-container').firstElementChild;
    if (!hasSkillField) {
        $el('#show-skill').checked = false;
    }
}

window.addSkill = function () {
    const clone = $el('#clone-skill').content.cloneNode(true);
    const uId = new Date().getTime();
    const skill = clone.querySelector('#skill-default');
    skill.setAttribute('id', `skill-${uId}`)
    skill.querySelector('[name="skill[default]name"]').setAttribute('name', `skill[${uId}]name`)
    skill.querySelector('[name="skill[default]range"]').setAttribute('name', `skill[${uId}]range`)
    skill.querySelector('[data-target]').setAttribute('data-target', `#skill-${uId}`);
    skill.querySelector('[onclick]').setAttribute('onclick', `removeSkillField(this.dataset.target)`)
    $el('#skill-container').appendChild(skill);
}

$el('#show-skill').addEventListener('click', function (e) {
    if (e.target.checked && !$el('#skill-container').firstElementChild) {
        addSkill();
    }
})

$el("#profile").onclick = function () {
    window.onfocus = () => {
        if (this.value) {
            this.value = "";
            $el("#upload-profile-btn").removeAttribute("style");
            $el("#upload-profile-btn")
                .querySelector("svg")
                .removeAttribute("style");
        }
    };
};

$el("#profile").addEventListener("change", function (e) {
    window.onfocus = null;
    if (e.target.value) {
        const fileReader = new FileReader();
        fileReader.onload = function (e) {
            $el("#upload-profile-btn").style.backgroundImage = `url("${e.target.result}")`;
            $el('#preview-cv-profile').style.backgroundImage = `url("${e.target.result}")`;
            $el("#upload-profile-btn").querySelector("svg").style.display = "none";
        };
        fileReader.readAsDataURL(e.target.files[0]);
    }
});

const previewHandler = function (inputs) {
    inputs.forEach(function (input) {
        let timeout;
        $el(input).addEventListener('keyup', function (e) {
            if (timeout) clearTimeout(timeout)
            timeout = setTimeout(() => {
                $el(`#preview-${e.target.id}`).innerText = e.target.value
            }, 300)
        })
    })
}

previewHandler([
    '#first-name',
    '#last-name',
    '#phone-number',
    '#email',
    '#address',
    '#head-line'
])

