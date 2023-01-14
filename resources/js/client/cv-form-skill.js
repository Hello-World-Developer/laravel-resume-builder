document.addEventListener('alpine:init', () => {
    Alpine.data('cvSkill', () => ({
        init() {
            const errorSkills = Object.entries($oldSkillErrors).map(([id, message]) => {
                return {
                    id: id.match(/\d+/g)[0],
                    message: message[0],
                }
            });
            const skills = Object.entries($oldSkills);
            if (skills.length) {
                this.skills = skills.map(function ([id, skill]) {
                    const  data = {
                        id,
                        labelForName: `skill_name_${id}`,
                        labelForRange: `skill_Range_${id}`,
                        attr: {
                            name: `skills[${id}][name]`,
                            range: `skills[${id}][range]`,
                        },
                        done: false,
                        name: skill.name,
                        range: skill.range,
                        error:{
                            message:''
                        }
                    };
                    const error = errorSkills.find(error => error.id == data.id)
                    if(error) data.error = {message:error.message}

                    return data;
                })

            } else {
                this.skills.push(this.createSkill())
            }

        },
        skills: [],
        createSkill() {
            const id = new Date().getTime();
            return {
                id,
                labelForName: `skill_name_${id}`,
                labelForRange: `skill_Range_${id}`,
                attr: {
                    name: `skills[${id}][name]`,
                    range: `skills[${id}][range]`,
                },
                done: false,
                name: '',
                range: 0,
                error:{
                    message:''
                }
            };
        },
        addSkill() {
            this.skills.push(this.createSkill())
        },
        removeSkill(id) {
            this.skills = this.skills.filter((skill) => skill.id != id);
            if (!this.skills.length) {
                document.getElementById('show-skill').checked = false;
            }
        },
        skillDropdown(el) {
            if (el.checked && !this.skills.length) {
                this.skills.push(this.createSkill())
            }
        },
        finishSkillEdit(id) {
            const found = this.skills.find((skill) => skill.id == id);
            if (found) found.done = true;
        }
    }))
})