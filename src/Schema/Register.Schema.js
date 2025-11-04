import Joi from 'joi';

export const registerSchema = Joi.object({
    userName: Joi.string()
        .min(5)
        .max(30)
        .required()
        .messages({
            'string-min': 'Tên đăng nhập phải có ít nhất 5 ký tự',
            'string-max': 'Tên đăng nhập không được vượt quá 30 ký tự',
            'any.required': 'Vui lòng nhập tên đăng nhập'
        }),

    email: Joi.string()
        .email({ tlds: { allow: false } }) // Cho phép email không có TLD như localhost
        .required()
        .messages({
            'string-email': 'Vui lòng nhập đúng định dạng email',
            'any.required': 'Email là bắt buộc'
        }),

    password: Joi.string()
        .min(8)
        .max(30)
        .required()
        .messages({
            'string-min': 'Mật khẩu phải có ít nhất 8 ký tự',
            'string-max': 'Mật khẩu không được vượt quá 30 ký tự',
            'any.required': 'Vui lòng nhập mật khẩu'
        }),

    confirmPassword: Joi.any()
        .valid(Joi.ref('password'))
        .required()
        .messages({
            'any.only': 'Mật khẩu xác nhận không khớp',
            'any.required': 'Vui lòng nhập mật khẩu xác nhận'
        }),

    phoneNumber: Joi.string()
        .required()
        .messages({
            'string.phoneNumber': 'Vui lòng nhập đúng định dạng số điện thoại',
            'any.required': 'Số điện thoại là bắt buộc'
        }),

    address: Joi.string()
        .max(100)
        .required()
        .messages({
            'string-max': 'Địa chỉ không được vượt quá 100 ký tự',
            'any.required': 'Vui lòng nhập địa chỉ'
        }),

    fullName: Joi.string()
        .max(50)
        .required()
        .messages({
            'string-max': 'Họ và tên không được vượt quá 50 ký tự',
            'any.required': 'Vui lòng nhập họ và tên'
        }),

    dateOfBirth: Joi.date()
        .less('now')
        .required()
        .messages({
            'date.less': 'Ngày sinh phải là một ngày trong quá khứ',
            'any.required': 'Vui lòng nhập ngày sinh'
        }),

    is2FAEnabled: Joi.boolean()
        .required()
        .messages({
            'any.required': 'Vui lòng nhập trạng thái xác thực hai yếu tố'
        }),

    twoFactorSecret: Joi.string().when('is2FAEnabled', {
        is: true,
        then: Joi.required().messages({
            'any.required': 'Vui lòng nhập mã xác thực hai yếu tố'
        }),
        otherwise: Joi.string().optional().allow('')
    }),
});