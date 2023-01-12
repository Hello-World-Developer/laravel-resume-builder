const skillLists = [
    {
        id: 'default',
        name: '',
        level: 0
    }
]

/**
 * render skill when changes
 * @returns{void}
 */
const renderSkillLists = function () {
    const skillContainer = document.querySelector('#preview-skill-container');
    skillContainer.innerHTML = '';
    if (skillLists.length) {
        const heading = document.createElement('h2')
        heading.className = 'font-semi-bold text-xs text-gray-700'
        heading.innerText = 'Skill'
        skillContainer.appendChild(heading)

        skillLists.forEach(function (sk) {
            if (sk.name) {
                skillContainer.innerHTML += `<div>
                    <span class="text-[0.6rem] text-gray-700 font-semibold">${sk.name}</span>
                    <div class="w-full bg-gray-200 rounded-full h-1.5 mb-1 dark:bg-gray-700">
                        <div class="bg-blue-600 h-1.5 rounded-full dark:bg-blue-500"
                            style="width: ${sk.level}%"></div>
                        </div>
                    </div>`
            }
        })

        skillContainer.innerHTML += `<hr class="mt-3" />`

        const haveSkill = skillLists.some(function (sk) {
            return sk.name.length
        })

        if (!haveSkill) skillContainer.innerHTML = '';
    }
}

/**
 * prepare for skill
 * @returns {void}
 * @param {*} el
 */
window.handleSkill = function (el) {
    const id = el.id.split('_').splice(-1)[0]
    const name = document.getElementById(`skill_name_${id}`).value
    const level = document.getElementById(`skill_range_${id}`).value
    const foundSkill = skillLists.find(sk => sk.id === id);
    if (foundSkill) {
        foundSkill.name = name;
        foundSkill.level = level;
        foundSkill.id = id;
    } else {
        skillLists.push({ id, name, level })
    }
    renderSkillLists()
}


/**
 * Delete skill field
 * @param {*} target
 */
window.removeSkillField = function (target) {
    $el(target).remove();
    const hasSkillField = $el('#skill-container').firstElementChild;
    if (!hasSkillField) {
        $el('#show-skill').checked = false;
    }
}
/**
 * add skill field
 * @returns {void}
 */
window.addSkill = function () {
    const clone = $el('#clone-skill').content.cloneNode(true);
    const uId = new Date().getTime();
    const skill = clone.querySelector('#skill_default');
    skill.setAttribute('id', `skill_${uId}`)
    skill.querySelector('[id="skill_name_default"]').setAttribute('name', `skill[${uId}]name`)
    skill.querySelector('[id="skill_name_default"]').setAttribute('id', `skill_name_${uId}`)
    skill.querySelector('[id="skill_range_default"]').setAttribute('name', `skill[${uId}]range`)
    skill.querySelector('[id="skill_range_default"]').setAttribute('id', `skill_range_${uId}`)
    skill.querySelector('[data-target]').setAttribute('data-target', `#skill-${uId}`);
    skill.querySelector('[onclick]').setAttribute('onclick', `removeSkillField(this.dataset.target)`)
    skillLists.push({ id: `${uId}`, name: '', level: 0 })
    $el('#skill-container').appendChild(skill);
}

/**
 * handle accordion
 */
$el('#show-skill').addEventListener('click', function (e) {
    if (e.target.checked && !$el('#skill-container').firstElementChild) {
        addSkill();
    }
})
