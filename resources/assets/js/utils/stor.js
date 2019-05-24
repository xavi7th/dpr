export const Modes = {
  Local: 1,
  Session: 2
}

export const Stor = function (mode) {
  this.supportsHtml5Storage = () => {
      try
      {
          return (typeof window !== 'undefined') ? ('localStorage' in window && window['localStorage'] !== null) : null
      }
      catch (e)
      {
          return false
      }
  }

  /**
   * @return {Storage}
   */
  this.storage = function () {
      return this.supportsHtml5Storage() ? ((mode === Modes.Local) ? window.localStorage : window.sessionStorage) : WinName
  }

  this.add = function (key, obj) {
      key = key.toString().toLowerCase()
      if (obj) {
          if (obj.constructor.name === 'String') this.storage().setItem(key, obj)
          else this.storage().setItem(key, JSON.stringify(obj))
      }
  }

  this.remove = function (key) {
      key = key.toString().toLowerCase()
      this.storage().removeItem(key)
  }

  this.contains = function (key) {
      key = key.toString().toLowerCase()
      return !!this.storage().getItem(key)
  }

  this.get = function (key) {
      key = key.toString().toLowerCase()
      const value = this.storage().getItem(key)
      if (!value || value === '') return undefined;
      else {
          try {
              return JSON.parse(value)
          }
          catch (ex) {
              return value
          }

      }
  }

  this.getText = function (key) {
      key = key.toString().toLowerCase()
      return this.storage().getItem(key)
  }

  this.clear = function () {
      return this.storage().clear()
  }
}

const WinNameItem = function (key, value) {
  this.key = key;
  this.value = value;
  return this;
}

const WinName = {
  items: [],
  setItem: function (key, value) {
      key = key.toString().toLowerCase();
      if (value) {
          if (value.constructor.name !== 'String') value = JSON.parse(value)
          if (this.contains(key) > -1) {
              //exists
              this.items[this.contains(key)].value = value;
          }
          else {
              if (Array.isArray(this.items)) this.items.push(new WinNameItem(key, value));
          }
      }

      this.save();
  },
  getItem: function (key) {
      key = key.toString().toLowerCase();
      var i = this.contains(key);
      if (i > -1) {
          return this.items[i].value;
      }
      return undefined;
  },
  contains: function (key) {
      key = key.toString().toLowerCase();
      for (var i = 0; i < this.items.length; i++) {
          if (this.items[i].key == key) {
              return i;
          }
      }
      return -1;
  },
  removeItem: function (key) {
      key = key.toString().toLowerCase();
      var ret = [];
      for (var i = 0; i < this.items.length ; i++) {
          if (this.items[i].key != key) {
              ret.push(this.items[i]);
          }
      }
      this.items = ret;
      this.save();
  },
  updateItem: function (key, value) {
      key = key.toString().toLowerCase();
      this.items[this.contains(key)].value = value;
      this.save();
  },
  save: function () {
      window.name = JSON.stringify(this.items);
  },
  retrieve: function () {
      try {
          this.items = JSON.parse(window.name);
      }
      catch (ex) { }
  },
  clear: function () {
    if ((typeof window !== 'undefined') && (window.name === '' || window.name == null || window.name === undefined)) {
      window.name = '[]'
    }
    else {
      this.retrieve()
    }
  }
}

const stor = new Stor(Modes.Local)

export default stor
export const sstor = new Stor(Modes.Session)
