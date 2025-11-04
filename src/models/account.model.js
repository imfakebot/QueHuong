import { DataTypes } from 'sequelize';
import sequelize from "../config/database.config.js";
import User from './user.model.js'; // 1. Import model User

const Account = sequelize.define('Account', {
    id: {
        type: sequelize.DataTypes.UUID,
        defaultValue: sequelize.DataTypes.UUIDV4,
        primaryKey: true,
    },

    username: {
        type: sequelize.DataTypes.STRING,
        allowNull: false,
        unique: true,
    },

    passwordhash: {
        type: sequelize.DataTypes.STRING,
        allowNull: false,
    },

    createdat: {
        type: sequelize.DataTypes.DATE,
        defaultValue: sequelize.DataTypes.NOW,
        allowNull: false,
    },

    is2faenabled: {
        type: sequelize.DataTypes.BOOLEAN,
        defaultValue: false,
        allowNull: false,
    },

    twoFactorSecret: {
        type: sequelize.DataTypes.STRING,
        allowNull: true,
    },

    userId: { // 2. Đổi tên 'userid' thành 'userId' cho nhất quán
        type: DataTypes.UUID,
        allowNull: false,
        // Không cần 'references' ở đây, Sequelize sẽ tự xử lý khi dùng belongsTo
    }
}, {
    tableName: 'accounts',
    timestamps: false // Thêm vì model của bạn không có updatedAt
})

// 3. Thiết lập quan hệ: Một Account thuộc về một User
Account.belongsTo(User, {
    foreignKey: 'userId', // Chỉ định cột khóa ngoại
    as: 'user'            // Bí danh để truy vấn, ví dụ: account.getUser()
});

account.belongsToMany(Role, {
    through: AccountRole,
    foreignKey: 'accountId',
    as: 'roles'
});

export default Account;