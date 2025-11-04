import sequelize from "../config/database.config";

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
})

export default Account;