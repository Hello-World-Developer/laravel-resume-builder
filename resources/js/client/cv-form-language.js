document.addEventListener('alpine:init', () => {
    Alpine.data('cvLanguage', () => ({
        init() {
            this.languages.push(this.createLanguage())
        },
        languages: [],
        createLanguage() {
            const id = new Date().getTime();
            return {
                id,
                labelForName: `language_name_${id}`,
                labelForLevel: `language_level_${id}`,
                name: `languages[${id}][name]`,
                level: `languages[${id}][level]`,
                done: false,

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
        finishLanguageEdit(id)
        {
            const found = this.languages.find((language) => language.id == id);
            if(found) found.done = true;
        }
    }))
})