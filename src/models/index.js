import sequelize from '../config/database.config.js';
import initUserModel from './user.model.js';
import initAccountModel from './account.model.js';
import initRoleModel from './role.model.js';
import initAccountRoleModel from './accountRole.model.js';

const db = {};

db.sequelize = sequelize;

// Khởi tạo các model và truyền vào instance của sequelize
db.User = initUserModel(sequelize);
db.Account = initAccountModel(sequelize);
db.Role = initRoleModel(sequelize);
db.AccountRole = initAccountRoleModel(sequelize);

// Thiết lập các mối quan hệ (associations) tại đây
const { User, Account, Role, AccountRole } = db;

// Một User có một Account
User.hasOne(Account, { foreignKey: 'userId', as: 'account' });
Account.belongsTo(User, { foreignKey: 'userId', as: 'user' });

// Quan hệ nhiều-nhiều giữa Account và Role thông qua bảng AccountRole
Account.belongsToMany(Role, {
    through: AccountRole,
    foreignKey: 'accountId',
    as: 'roles'
});
Role.belongsToMany(Account, {
    through: AccountRole,
    foreignKey: 'roleId',
    as: 'accounts'
});

export default db;