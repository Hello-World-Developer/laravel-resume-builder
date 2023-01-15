document.addEventListener('alpine:init', () => {
    Alpine.data('cvLanguage', () => ({
        init() {
            const errorLanguages = Object.entries($oldLanguageErrors).map(([id, message]) => {
                return {
                    id: id.match(/\d+/g)[0],
                    message: message[0],
                }
            });

            const oldLanguages = Object.entries($oldLanguages);

            if (oldLanguages.length) {

                this.languages = oldLanguages.map(function ([id, language]) {
                    const data = {
                        id,
                        labelForName: `language_name_${id}`,
                        labelForLevel: `language_level_${id}`,
                        attr: {
                            name: `languages[${id}][name]`,
                            level: `languages[${id}][level]`,
                        },
                        name: language.name,
                        level: language.level,
                        done: false,
                        error: {
                            message: ''
                        }
                    };
                    const error = errorLanguages.find(error => error.id == data.id)
                    if (error) data.error = { message: error.message }
                    return data;
                })

            } else {
                this.languages.push(this.createLanguage())
            }

        },
        languages: [],
        createLanguage() {
            const id = new Date().getTime();
            return {
                id,
                labelForName: `language_name_${id}`,
                labelForLevel: `language_level_${id}`,
                attr: {
                    name: `languages[${id}][name]`,
                    level: `languages[${id}][level]`,
                },
                name:'',
                level:0,
                done: false,
                error: {
                    message: ''
                }
            };
        },
        addLanguage() {
            this.languages.push(this.createLanguage())
        },
        removeLanguage(id) {
            this.languages = this.languages.filter((language) => language.id != id);
            if (!this.languages.length) {
                document.getElementById('show-language').checked = false;
            }
        },
        languageDropdown(el) {
            if (el.checked && !this.languages.length) {
                this.languages.push(this.createLanguage())
            }
        },
        finishLanguageEdit(id) {
            const found = this.languages.find((language) => language.id == id);
            if (found) found.done = true;
        }
    }))
})