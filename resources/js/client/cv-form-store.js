document.addEventListener('alpine:init', () => {
    Alpine.store('cvForm', {
        data: {
            profileImage:'',
        },
        changeProfile(el) {
            const file = el.files[0];
            const fileReader = new FileReader()
            fileReader.onload = (e) => {
                this.data.profileImage = e.target.result;
            }
            fileReader.readAsDataURL(file);
        }
    })
})
