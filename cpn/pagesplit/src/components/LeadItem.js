
class LeadItem {
    constructor({ name, phonenumber, nameFb, linkFb, service, branch, script, interactive, note }) {
        this.data = {
            name: name,
            phonenumber: phonenumber,
            nameFb: nameFb,
            linkFb: linkFb,
            service: service,
            branch: branch,
            script: script,
            interactive: interactive,
            note: note,
        }

        this.$tr = document.createElement('div')
        this.$tr.className = 'row'

        this.$name = new Cell(name);
        this.$phonenumber = new Cell(phonenumber);
        this.$linkFb = new CellLink(nameFb, linkFb);
        this.$service = new Cell(service);
        this.$branch = new Cell(branch);
        this.$script = new Cell(script);
        this.$interactive = new CellLink('Link ảnh', interactive);
        this.$note = new Cell(note);

    }
    
    render() {
        this.$tr.appendChild(this.$name.render());
        this.$tr.appendChild(this.$phonenumber.render());
        this.$tr.appendChild(this.$linkFb.render());
        this.$tr.appendChild(this.$service.render());
        this.$tr.appendChild(this.$branch.render());
        this.$tr.appendChild(this.$script.render());
        this.$tr.appendChild(this.$interactive.render());
        this.$tr.appendChild(this.$note.render());

        return this.$tr
    }
}
class Cell {
    constructor(name) {
        this.$container = document.createElement('div');
        this.$container.className = 'col';
        this.$container.innerHTML = name;
    }
    render () {
        return this.$container;
    }
}
class CellLink {
    constructor(name, link) {
        this.$container = document.createElement('div');
        this.$container.className = 'col';
        this.$linkText = document.createElement('a');
        this.$linkText.target = '_blank';
        this.$linkText.href = link;
        this.$linkText.innerHTML = name;
    }
    render () {
        this.$container.appendChild(this.$linkText);
        return this.$container;
    }
}
export { Cell, LeadItem };