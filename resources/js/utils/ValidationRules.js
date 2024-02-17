
export const required = value => value.trim() ? null : 'This field is required.';

export const minLength = (length) => value => value.length >= length ? null : `Minimum length is ${length} characters.`;

export const emailFormat = value => /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(value) ? null : 'Invalid email format.';

export const alphanumericOnly = value => /^[a-zA-Z0-9]+$/.test(value) ? null : 'Only alphanumeric characters are allowed.';

export const noSpecialCharacters = value => /^[a-zA-Z0-9\s]+$/.test(value) ? null : 'Special characters are not allowed.';

export const numberRange = (min, max) => value => (value >= min && value <= max) ? null : `Value should be between ${min} and ${max}.`;

export const maxLength = (length) => value => value.length <= length ? null : `Maximum length is ${length} characters.`;

export const urlFormat = value => /^https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}([-a-zA-Z0-9@:%_\+.~#?&//=]*)$/.test(value) ? null : 'Invalid URL format.';

export const phoneNumberFormat = value => /^\+?([0-9]{1,3})?[- .]?(\([0-9]{1,3}\)|[0-9]{1,3})[- .]?[0-9]{1,4}[- .]?[0-9]{1,4}[- .]?[0-9]{1,9}$/.test(value) ? null : 'Invalid phone number format.';

export const numericOnly = value => /^[0-9]+$/.test(value) ? null : 'Only numeric characters are allowed.';

export const uppercaseOnly = value => /^[A-Z]+$/.test(value) ? null : 'Only uppercase characters are allowed.';

export const lowercaseOnly = value => /^[a-z]+$/.test(value) ? null : 'Only lowercase characters are allowed.';

export const matchesPattern = (pattern) => value => pattern.test(value) ? null : `Invalid format.`;

export const dateValidationMMDDYYYY = value => /^\d{2}\/\d{2}\/\d{4}$/.test(value) ? null : 'Invalid date format. Expected format: MM/DD/YYYY';


// ... Add more rules as needed

// Path: resources\js\utils\ValidationRules.js
