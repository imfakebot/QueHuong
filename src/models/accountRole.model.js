import { DataTypes } from 'sequelize';
import sequelize from '../config/database.config.js';

const AccountRole = sequelize.define('AccountRole', {
    accountId: {
        type: DataTypes.UUID,
        primaryKey: true, // Đây là một phần của khóa chính
        allowNull: false
    },
    roleId: {
        type: DataTypes.UUID,
        primaryKey: true, // Đây cũng là một phần của khóa chính
        allowNull: false
    }
}, {
    tableName: 'account_roles', // Tên bảng
    timestamps: false // Tắt timestamps nếu không cần thiết
});




export default AccountRole;
